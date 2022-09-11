<div>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" for="name" class="form-control" wire:model="name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" for="email" class="form-control" wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" for="phone" class="form-control" wire:model="phone">
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="msg">Message</label>
                                    <textarea name="msg" wire:model="msg" class="form-control"></textarea>
                                    @error('msg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
