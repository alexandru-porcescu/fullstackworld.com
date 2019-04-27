<div id="myModal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Modal Card</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">


            <h4 class="title is-5">{{ __('fullstackworld.newsletter.title') }}</h4>
            <form class="form-loader" id="form-contact" method="POST"
                  action="{{ route('home') }}">
                @csrf

                <div class="field">
                    <div class="control">
                        <input id="firstname" name="firstname" value="{{ old('firstname') }}"
                               class="input {{ $errors->has('firstname') ? ' is-danger' : '' }}" type="text"
                               placeholder="{{ __('fullstackworld.newsletter.form.input.firstname') }}" required>
                    </div>

                    @if ($errors->has('firstname'))
                        <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <input id="email" name="email" value="{{ old('email') }}"
                               class="input {{ $errors->has('firstname') ? ' is-danger' : '' }}" type="email"
                               placeholder="{{ __('fullstackworld.newsletter.form.input.email') }}" required>
                    </div>

                    @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit"
                                class="button is-primary is-fullwidth">{{ __('fullstackworld.newsletter.form.submit') }}</button>
                    </div>
                </div>

            </form>

        </section>
    </div>
</div>

