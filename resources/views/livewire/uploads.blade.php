<div>
    <div>
        <section style="padding-top: 60px;">
            <div class="container">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('messsage')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3>Upload File</h3>
                            </div>
                            <div class="card-body">
                                <form id="upload-form" wire:submit.prevent="uploadfile()">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" wire:model="title" class="form-control"/>
                                        @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="filename">File</label>
                                        <input type="file" name="file" wire:model="filename" class="form-control"/>
                                        @error('filename')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-info">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
