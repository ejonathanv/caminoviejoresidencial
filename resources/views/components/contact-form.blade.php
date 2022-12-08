<!-- We need a modal on the right side of the screen that shows the contact form  -->
<div class="contact__form @if($errors->any() || session('success')) active @endif" id="contactForm">
    <div class="contact__form__content">

        <!-- We need a close button on the top right corner -->
        <div class="contact__form__close">
            <button id="hideContactFormButton">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <h3 class="contact__form__title">
            ¡Quiero más información!
        </h3>

        <!-- We need to show here the success message if the form was sent successfully -->
        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact') }}" id="contactForm" method="post">
            @csrf
            <div class="form__group">
                <label for="name">Nombre completo</label>
                <input type="text" name="name" id="name" placeholder="John Doe" value="{{ old('name') }}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" placeholder="usuario@empresa.com" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__group">
                <label for="phone">Teléfono (opcional)</label>
                <input type="tel" name="phone" id="phone" placeholder="10 Dígitos" value="{{ old('phone') }}">
                @error('phone')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__group">
                <label for="message">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="4" placeholder="Escríbe aquí...">{{ old('message') }}</textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="terms">
                <label for="terms">Acepto los <a href="#">términos y condiciones</a></label>
                <input type="checkbox" name="terms" id="terms">
                <div>
                @error('terms')
                    <span class="error">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="form__group">
                <button type="submit" class="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>