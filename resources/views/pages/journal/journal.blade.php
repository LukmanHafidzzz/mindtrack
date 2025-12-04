@extends('layouts.app')

@section('title', 'Journals - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/journal.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Journals</h1>
    <h5>This is for you and yourself only</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <div class="fw-medium">    
            Last saved:
            @if ($latestJournal)
                {{ $latestJournal->created_at->format('d/m/Y') }}
            @else
                -
            @endif
        </div>
        <a href="#" class="btn journal-btn px-3 py-2" data-bs-toggle="modal" data-bs-target="#addJournalModal">
            <div>Add journal</div>
        </a>
    </div>
    <div class="card journal-bg text-white p-3">
        <div class="card-body">
            <div class="row g-3">
                @forelse ($journals as $journal)
                    <div class="col-md-4">
                        <div class="card journal-card text-white">
                            <div class="card-body">

                                <div class="preview-card">
                                    <iframe
                                        src="{{ asset('storage/' . $journal->journal_file) }}"
                                        frameborder="0">
                                    </iframe>
                                </div>

                                <h6 class="card-title mt-3">{{ $journal->title }}</h6>
                                <p class="card-text fs-7">
                                    Last modified: {{ $journal->updated_at->format('d/m/Y') }}
                                </p>

                                <a
                                    href="{{ asset('storage/' . $journal->journal_file) }}"
                                    target="_blank"
                                    class="btn read-btn px-4 py-2 fs-7">
                                    Read
                                </a>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <h6 class="text-white-50 mb-2">
                            Your journal is empty for now.
                        </h6>
                        <p class="text-white-50 fs-7">
                            Take a moment to write your first entry.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<form action="{{ route('journals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="modal journal-modal fade" id="addJournalModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Journal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-4">
                        <label>Journal Title</label>
                        <input
                            type="text"
                            name="title"
                            class="form-control mt-2 py-2"
                            placeholder="Input title here...">
                    </div>

                    <div class="mb-3 journal-file-wrapper">
                        <label class="form-label">Journal File (PDF)</label>

                        <label class="journal-file-btn">
                            <span>Select PDF file</span>
                            <input
                                type="file"
                                name="journal_file"
                                class="journal-file-input"
                                accept="application/pdf"
                                onchange="this.previousElementSibling.innerText = this.files[0].name">
                        </label>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </div>
        </div>
    </div>
</form>
@endsection