@extends('layout')

@section('title')
    บทความทั่วไป
@endsection

@section('content')
    <div class="container">
        <div class="mb-5 text-center text-sm-start">
            <h1 class="fw-extrabold tracking-tight mb-2" style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">
                บทความทั้งหมด
            </h1>
            <p class="text-muted mb-0">อ่านข่าวสาร ความรู้ และบทความทั่วไปของระบบ</p>
        </div>

        <div class="row g-4">
            @forelse ($blogs as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card-modern h-100 border-0 overflow-hidden d-flex flex-column">
                        <div class="p-4 flex-grow-1">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if(isset($item['status']) && $item['status'])
                                    <span class="badge rounded-pill bg-success-subtle text-success border border-success-subtle px-3 py-1">🟢 เผยแพร่แล้ว</span>
                                @else
                                    <span class="badge rounded-pill bg-warning-subtle text-warning border border-warning-subtle px-3 py-1">🟡 ไม่เผยแพร่</span>
                                @endif
                                <small class="text-muted">General</small>
                            </div>
                            <h4 class="card-title fw-bold text-dark mb-3" style="line-height: 1.4;">
                                {{ $item['title'] }}
                            </h4>
                            <p class="card-text text-muted" style="font-size: 0.95rem; line-height: 1.6;">
                                {{ Str::limit($item['content'] ?? '', 150, '...') }}
                            </p>
                        </div>
                        <div class="px-4 pb-4 pt-0 mt-auto">
                            <hr class="mb-3 mt-0" style="border-color: #f1f5f9;">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="#" class="text-decoration-none fw-bold" style="color: #4f46e5; font-size: 0.9rem; transition: var(--transition);">
                                    อ่านเพิ่มเติม →
                                </a>
                                <small class="text-muted" style="font-size: 0.8rem;">5 mins read</small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5 text-muted">
                    <div class="py-4">
                        <span class="fs-1 d-block mb-3">📁</span>
                        ยังไม่มีบทความที่ถูกเผยแพร่ในส่วนนี้
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
