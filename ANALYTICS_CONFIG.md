# Configuración de Analytics - Black Cat Hostal

## Google Analytics 4 Configurado ✅

### IDs Actuales:
- **Google Analytics 4**: `G-RM4T6B4XS7`
- **Google Tag Manager**: `GTM-KQN8WXBX`
- **Facebook Pixel**: `1872747216193432`

### Configuración en .env

Agrega estas líneas a tu archivo `.env`:

```env
GOOGLE_TAG_MANAGER_ID=GTM-KQN8WXBX
GOOGLE_ANALYTICS_4_ID=G-RM4T6B4XS7
FACEBOOK_PIXEL_ID=1872747216193432
```

### Eventos Tracked Automáticamente:

#### 📊 **Eventos Básicos:**
- **Page Views**: Cada visita a página
- **Language Changes**: Cambio de idioma (ES/EN/PT)
- **Form Submissions**: Envío de formularios
- **Outbound Links**: Clicks a enlaces externos

#### 🏨 **Eventos Específicos del Hostal:**
- **Room Views**: `trackRoomView(roomType)`
  - Family Room
  - King & Queen
  - Twin Kitchenette
  - Superior King
  - Reduced Mobility

- **Contact Form**: `trackContactForm()`
  - Formulario de contacto
  - Formulario del home

### Verificar Funcionamiento:

#### 1. **Google Analytics 4:**
- Ir a: https://analytics.google.com
- Seleccionar propiedad `G-RM4T6B4XS7`
- Ver "Realtime" > "Overview"
- Navegar por el sitio y verificar tráfico en tiempo real

#### 2. **Google Tag Manager:**
- Ir a: https://tagmanager.google.com
- Seleccionar contenedor `GTM-KQN8WXBX`
- Ver "Preview" para debug

#### 3. **Facebook Pixel:**
- Instalar Facebook Pixel Helper (extensión Chrome)
- Verificar que detecte el pixel `1872747216193432`

### Funciones JavaScript Disponibles:

```javascript
// Trackear vista de habitación
trackRoomView('family'); // 'twin', 'king-queen', etc.

// Trackear envío de formulario
trackContactForm();

// Trackear cambio de idioma  
trackLanguageChange('en'); // 'es', 'pt'
```

### Datos Adicionales Tracked:

- **Idioma actual**: `{{ app()->getLocale() }}`
- **Sección del hostal**: `{{ Route::currentRouteName() }}`
- **Título de página**: `document.title`
- **URL completa**: `window.location.href`

### Estructura de Archivos:

```
resources/
├── views/
│   ├── partials/
│   │   └── analytics.blade.php    # Configuración centralizada
│   └── layouts/
│       └── app.blade.php         # Incluye analytics
config/
└── app.php                       # IDs configurables
```

### Debug Console:

Para verificar en consola del navegador:

```javascript
// Verificar dataLayer
console.log(dataLayer);

// Verificar gtag
console.log(typeof gtag);

// Verificar Facebook Pixel
console.log(typeof fbq);
```

### 🚀 **Analytics Completamente Funcional!**

El sitio ahora tiene tracking completo de:
- ✅ Visitas por página
- ✅ Interacción con habitaciones
- ✅ Formularios de contacto
- ✅ Cambios de idioma
- ✅ Enlaces externos
- ✅ Conversiones