@extends('backend.app')

@section('content')
    <div class="section">
        <div method="post" action="google.com">
            <div class="row">
                <div class="col s9">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Category Title" id="Category" type="text" class="validate">
                            <label for="Category">Category</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="Slug" type="text" class="validate" disabled>
                            <label for="Slug">Slug</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div id="Editor" class="Editor" name="Editor">

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Parent Category" id="ParentID" type="text" class="validate">
                            <label for="ParentID">Parent</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="CreatedBy" disabled type="text" class="validate">
                            <label for="CreatedBy">Created By</label>
                        </div>

                    </div>
                </div>
                <div class="col s3">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Media IDs" id="MediaIDs" type="text" class="validate">
                            <label for="MediaIDs">Media IDs</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="file-field col s12">
                            <div class="btn">
                                <span>Feature Media</span>
                                <input class="note-image-input" name="files"
                                       type="file">
                            </div>
                            <div class="file-path-wrapper"><input class="file-path" type="text"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="divider"></div>


@endsection


