<div>
    <div>
        <section style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3>Upload</h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="imageupload" id="upload-images" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="images">Upload Image</label>
                                        <input type="file" class="form-control" wire:model="images" multiple>
                                    </div>
                                    <button class="btn btn-success" type="submit">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
