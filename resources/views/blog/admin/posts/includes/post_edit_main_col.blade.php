@php
    /** @var \App\Models\BlogPost $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if($item->is_published)
                    Опубликовано
                @else
                    Черновик
                @endif
            </div>
            <div class="card-body">
                <div class="card-title"></div>
                <div class="card-subtitle mb-2 text-muted"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab">Основные данные</a>
                        </li>
                        <li class="nav-item">
                            <a href="#adddata" class="nav-link" data-toggle="tab" role="tab">Доп. данные</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input name="title" value="{{ $item->title }}"
                                       id="title"
                                       type="text"
                                       class="form-control"
                                       minlength="3"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="content_raw">Статья</label>
                                <textarea name="content_raw" value="{{ $item->slug }}"
                                       id="content_raw"
                                       type="text"
                                       class="form-control"
                                       rows="10">{{ old('content_raw', $item->content_raw) }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane" id="adddata" role="tabpanel">
                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select name="category_id" value="{{ $item->category_id }}"
                                        id="category_id"
                                        class="form-control"
                                        placeholder="Выберите категорию"
                                        required>
                                    @foreach($categoryList as $categoryOption)
                                        <option value="{{ $categoryOption->id }}"
                                                @if($categoryOption->id == $item->parent_id) selected @endif>
                                            {{ $categoryOption->id_title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slug">Идентификатор</label>
                                <input name="slug" value="{{ old('content_raw', $item->slug) }}"
                                       id="slug"
                                       type="text"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Выдержка</label>
                                <textarea name="excerpt"
                                          id="excerpt"
                                          rows="4"
                                          class="form-control">{{ old('excerpt', $item->excerpt) }}</textarea>
                            </div>
                            <div class="form-check">
                                <input type="hidden"
                                       name="is_published"
                                       value="0">

                                <input name="is_published"
                                       class="form-check-input"
                                       type="checkbox"
                                       value="1"
                                       @if($item->is_published)
                                       checked="checked"
                                       @endif

                                <label class="form-check-label"
                                       for="is_published">
                                    Опубликовано
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
