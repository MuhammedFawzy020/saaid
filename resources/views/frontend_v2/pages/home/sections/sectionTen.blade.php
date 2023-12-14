@if (count($blogs) >= 1)
    <section class="Countries-section" id="Countries">
        <div class="container-fluid">

            <div class="text-center">
                <h1 class="display-1">
                    المدونة
                </h1>
                <p class="text-muted">
                    يمكنك قراءة المدونة الخاصة بنا لتتزود بكل المعلومات ...
                </p>
            </div>
            <br />
            <div class="Countries-boxes mt-2">
                <div class="row">
                    @foreach ($blogs as $key => $blog)
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('view-blog', ['id' => $blog->id]) }}" class="text-decoration-none">
                                <div class="Countries-block">
                                    <div class="Countries-media">
                                        <div> <img src="{{ get_file($blog->image) }}" alt="{{ $blog->image }}" /></div>
                                    </div>
                                    <div class="Countries-content">
                                        <div class="count-content-title">{{ $blog->title_ar }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </section>


@endif
