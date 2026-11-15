<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Juan Estrada</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id='inicio'>
    <h2>Calculadora - Juan Estrada</h2>

    <form action="{{ route('calculadora.calcular') }}" method="POST">
        @csrf

        <div>
            <label for="valor1">Primer número:</label><br>
            <input type="number" id="valor1" name="valor1"
                   step="any" value="{{ old('valor1') }}" required>
            @error('valor1')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label for="valor2">Segundo número:</label><br>
            <input type="number" id="valor2" name="valor2"
                   step="any" value="{{ old('valor2') }}" required>
            @error('valor2')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label for="operacion">Operación:</label><br>
            <select id="operacion" name="operacion" required>
                <option value="">Seleccione...</option>
                <option value="sumar" @selected(old('operacion') === 'sumar')>Sumar</option>
                <option value="restar" @selected(old('operacion') === 'restar')>Restar</option>
                <option value="multiplicar" @selected(old('operacion') === 'multiplicar')>Multiplicar</option>
                <option value="dividir" @selected(old('operacion') === 'dividir')>Dividir</option>
            </select>
            @error('operacion')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <br>
        <button type="submit" id='boton'>Calcular</button>
    </form>

    @isset($resultado)
        <h2>Resultado: </h2><h1>{{ $resultado }}</h1>
    @endisset
    </div>
</body>
</html>