<div class="container mt-4">
    <div class="card">
        <form method="get" action="{{ route('all-workers') }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label class="">
                                الجنسية
                            </label>
                            <select class="form-select" name="nationality">
                                <option value="">
                                    جميع الجنسيات
                                </option>
                                @foreach ($nationalities as $key => $nationality)
                                    <option value="{{ $nationality->id }}"
                                        {{ request()->get('nationality') == $nationality->id ? 'selected' : '' }}>
                                        {{ $nationality->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label class="">
                                العمر المطلوب
                            </label>
                            <select class="form-select" name="age">
                                <option value="">
                                    جميع الاعمار
                                </option>
                                @foreach ($ages as $age)
                                    <option value="{{ $age->id }}"
                                        {{ request()->get('age') == $age->id ? 'selected' : '' }}>
                                        من {{ $age->from }} سنة إلي {{ $age->to }} سنة
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label class="">
                                المهنة المطلوبة
                            </label>
                            <select class="form-select" name="job">
                                <option value="">
                                    جميع المهن
                                </option>
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}"
                                        {{ request()->get('job') == $job->id ? 'selected' : '' }}>
                                        {{ $job->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-2">
                            <label class="">
                                الديانة
                            </label>
                            <select class="form-select" name="religion">
                                <option value="">
                                    جميع الديانات
                                </option>
                                <option value="1" {{ request()->get('religion') == 1 ? 'selected' : '' }}>
                                    مسلم / ة
                                </option>
                                <option value="2" {{ request()->get('religion') == 2 ? 'selected' : '' }}>
                                    غير مسلم / ة
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group mb-2">

                            <input type="submit" class="btn btn-secondary w-25 mt-4"
                                style="background-color:#B9AE80"name="submit" value="{{ __('إبحث') }}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
