<form action="{{ route('pqrs.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre completo</label>
    <input
        type="text"
        id="nombre"
        name="nombre"
        placeholder="Tu nombre"
        value="{{ old('nombre') }}"
        class="{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
    >
    @error('nombre') <p class="error-msg">{{ $message }}</p> @enderror

    <label for="correo">Correo electrónico</label>
    <input
        type="email"
        id="correo"
        name="correo"
        placeholder="correo@ejemplo.com"
        value="{{ old('correo') }}"
        class="{{ $errors->has('correo') ? 'is-invalid' : '' }}"
    >
    @error('correo') <p class="error-msg">{{ $message }}</p> @enderror

    <label for="tipo">Tipo de solicitud</label>
    <select id="tipo" name="tipo" class="{{ $errors->has('tipo') ? 'is-invalid' : '' }}">
        @foreach(['Petición', 'Queja', 'Reclamo', 'Sugerencia'] as $opcion)
            <option value="{{ $opcion }}" {{ old('tipo') === $opcion ? 'selected' : '' }}>
                {{ $opcion }}
            </option>
        @endforeach
    </select>
    @error('tipo') <p class="error-msg">{{ $message }}</p> @enderror

    <label for="mensaje">Mensaje</label>
    <textarea
        id="mensaje"
        name="mensaje"
        rows="5"
        placeholder="Escribe tu mensaje aquí..."
        class="{{ $errors->has('mensaje') ? 'is-invalid' : '' }}"
    >{{ old('mensaje') }}</textarea>
    @error('mensaje') <p class="error-msg">{{ $message }}</p> @enderror

    <button type="submit">Enviar solicitud</button>
</form>