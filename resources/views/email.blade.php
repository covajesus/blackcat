<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de Black Cat Hostal</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #FF8000; border-bottom: 2px solid #FF8000; padding-bottom: 10px;">
            Nuevo mensaje desde la web - Black Cat Hostal
        </h2>
        
        <div style="background-color: #f9f9f9; padding: 20px; border-left: 4px solid #FF8000; margin: 20px 0;">
            <h3 style="margin-top: 0; color: #333;">Información del contacto:</h3>
            <p><strong>Nombre:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p><strong>Teléfono:</strong> {{ $phone }}</p>
            @if(isset($subject))
            <p><strong>Asunto:</strong> {{ $subject }}</p>
            @endif
        </div>
        
        <div style="margin: 20px 0;">
            <h3 style="color: #333;">Mensaje:</h3>
            <div style="background-color: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 5px;">
                {!! nl2br(e($body)) !!}
            </div>
        </div>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #666;">
            <p>Este mensaje fue enviado desde el formulario de contacto de <strong>Black Cat Hostal</strong></p>
            <p>Fecha: {{ date('d/m/Y H:i:s') }}</p>
        </div>
    </div>
</body>
</html>