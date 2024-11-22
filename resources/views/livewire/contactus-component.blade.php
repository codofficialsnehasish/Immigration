@if (session()->has('success') && $formSubmitted)
    <div id="contact_message" class="success-msg" style="display: block">
        <i class="fa fa-paper-plane-o"></i> {{ session('success') }}
    </div>
@endif

@if(!$formSubmitted)
<form wire:submit.prevent="submit">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" wire:model="name" placeholder="Name" required aria-required="true">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="email" wire:model="email" placeholder="Email" required aria-required="true">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" wire:model="phone" placeholder="Phone" required aria-required="true">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" wire:model="subject" placeholder="Subject" required aria-required="true">
        </div>

        {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <input class="form-control form-control-lg" id="formFileLg" type="file" wire:model="file" />
        </div> --}}

        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <textarea wire:model="message" placeholder="Your message here"></textarea>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <div class="custom-controls-stacked pb_20">
                <label class="custom-control material-checkbox">
                    <input type="checkbox" class="material-control-input">
                    <span class="material-control-indicator"></span>
                    <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                </label>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
            <button type="submit" class="theme-btn btn-two"><span>Message</span></button>
        </div>
    </div>
</form>
@endif
