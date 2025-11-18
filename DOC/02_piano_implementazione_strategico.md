# Piano di Implementazione Strategico - Tortelliamo

## Documento Guida per Modifiche e Comunicazione Cliente

**Versione:** 1.0  
**Data:** 2025-11-18  
**Basato su:** Appunti Cliente + Analisi Progetto Completa

---

## EXECUTIVE SUMMARY

Questo documento fornisce una roadmap dettagliata per implementare le richieste del cliente, allineando il sito web attuale con la visione comunicativa e commerciale di Tortelliamo.

### Gap Analysis Rapida

-   ✅ **Presente**: Struttura base, design moderno, integrazione Stripe
-   ⚠️ **Da Migliorare**: Contenuti, categorizzazione prodotti, servizi
-   ❌ **Mancante**: Gastronomia completa, catering, prodotti artigianali locali

---

## 1. ANALISI APPUNTI CLIENTE

### 1.1 Messaggi Chiave Identificati

#### Posizionamento Brand

```
"Tradizione guardando all'innovazione"
"Non esiste innovazione senza tradizione"
```

**Interpretazione:**

-   Equilibrio tra tradizione e modernità
-   Focus su autenticità con processi moderni (pastorizzazione)
-   Valorizzazione know-how artigianale + sicurezza alimentare

#### Valori Fondamentali

1. **Qualità**: Uova fresche pastorizzate, prodotti locali, km 0
2. **Freschezza**: Produzione quotidiana (5:00-12:00)
3. **Sicurezza**: Pastorizzazione per conservazione
4. **Territorio**: Prodotti locali e artigianali
5. **Inclusività**: Vegan e Gluten-Free

### 1.2 Categorie Prodotto Richieste

#### A. PASTA FRESCA (Categoria Principale)

```
├── Pasta Ripiena: Tortelli (cipolla borettana, tosone), Cappelletti, Lune nere tartufate
├── Pasta al Forno: Lasagne, Rosette, Crespelle
├── Pasta Lunga: Tagliatelle, Tagliolini
├── Pasta al Torchio: Gramigna, Bigoli, Passatelli
├── Gnocchi
└── Pasta Vegana: Linea completa
```

#### B. GASTRONOMIA (Nuova Categoria)

```
- Pasto completo quotidiano (antipasti → dolci)
- Piatti pronti da gustare
- Servizio da asporto
- Consumo sul posto
- Prenotazione WhatsApp
```

#### C. PRODOTTI ARTIGIANALI LOCALI (Nuova)

```
├── Bevande: Lambrusco, Birre artigianali
├── Condimenti: Sughi, Basi, Giardiniera
├── Conserve: Composte, Marmellate
└── Liquori artigianali
```

### 1.3 Servizi da Evidenziare

```
SERVIZI:
1. Catering
2. Street Food
3. Sagre
4. Eventi
5. Spedizioni in tutta Italia

CANALI:
- WhatsApp (prioritario)
- Telefono: 320 862 6210
- Email
- Social Media
```

### 1.4 Elementi Visivi Richiesti

```
PRIORITÀ ALTA:
□ Logo Gluten Free
□ Logo Vegano
□ Foto laboratorio pasta fresca
□ Foto staff/collaboratori
□ Foto mezzi social (Novellara Porka)
□ Fotogallery completa

BADGE:
+ Km 0
+ Prodotti Locali
+ Produzione Giornaliera
```

---

## 2. MODIFICHE DATABASE

### 2.1 Migration: Estensione Products

```sql
ALTER TABLE products ADD COLUMN:
- category VARCHAR(50)
- subcategory VARCHAR(50)
- is_vegan BOOLEAN DEFAULT false
- is_gluten_free BOOLEAN DEFAULT false
- is_km_zero BOOLEAN DEFAULT false
- ingredients TEXT
- weight VARCHAR(20)
- preparation_time INT
- available_for_shipping BOOLEAN DEFAULT false
```

### 2.2 Nuove Tabelle

#### Services

```sql
CREATE TABLE services (
    id BIGINT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    details TEXT,
    icon VARCHAR(100),
    image VARCHAR(255),
    is_active BOOLEAN DEFAULT true,
    sort_order INT DEFAULT 0,
    timestamps
);
```

#### Gallery

```sql
CREATE TABLE gallery (
    id BIGINT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    image_path VARCHAR(255),
    category VARCHAR(50),
    sort_order INT DEFAULT 0,
    is_featured BOOLEAN DEFAULT false,
    timestamps
);
```

#### Newsletter Subscriptions

```sql
CREATE TABLE newsletter_subscriptions (
    id BIGINT PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    subscribed_at TIMESTAMP,
    ip_address VARCHAR(45),
    user_agent TEXT,
    timestamps
);
```

---

## 3. MODIFICHE CONTENUTI

### 3.1 Hero Section - Nuovi Messaggi

**Slide 1:**

```
Titolo: "TRADIZIONE CHE GUARDA ALL'INNOVAZIONE"
Sottotitolo: "Pasta fresca fatta ogni giorno con ingredienti locali e km 0"
```

**Slide 2:**

```
Titolo: "INNOVAZIONE CHE RISPETTA LA TRADIZIONE"
Sottotitolo: "Uova fresche pastorizzate per massima sicurezza e qualità"
```

**Slide 3 (Nuova):**

```
Titolo: "DAL LABORATORIO ALLA TUA TAVOLA"
Sottotitolo: "Produzione quotidiana dalle 5:00 alle 12:00"
```

### 3.2 Section Welcome - Testo Aggiornato

```markdown
BENVENUTI DA TORTELLIAMO

# GASTRONOMIA CON SAPORI AUTENTICI DELLA TRADIZIONE

**Tradizione che guarda all'innovazione**: crediamo che non esista
innovazione senza tradizione. Per questo utilizziamo processi moderni
come la pastorizzazione delle uova fresche, garantendo sicurezza
alimentare senza compromettere il gusto autentico.

Ogni giorno, dalle 5:00 alle 12:00, il nostro laboratorio produce
pasta fresca con ingredienti locali e, quando possibile, a km 0.
Uova fresche pastorizzate, farine selezionate e prodotti del
territorio sono la base della nostra filosofia.
```

### 3.3 Nuova Sezione: Le Nostre Categorie

```markdown
# TRE ANIME, UN'UNICA PASSIONE

## PASTA FRESCA

La nostra specialità: pasta fatta a mano ogni giorno seguendo
ricette tradizionali. Dalla pasta ripiena a quella al torchio,
ogni formato racconta la storia della cucina emiliana.

## GASTRONOMIA

Piatti pronti da gustare: dal pranzo completo ai contorni,
tutto preparato con la stessa cura della pasta fresca.
Disponibile da asporto o consumabile sul posto.

## PRODOTTI ARTIGIANALI

Selezione di prodotti locali: vini, birre artigianali, conserve
e condimenti. Sosteniamo i produttori del territorio portando
nelle vostre case il meglio dell'Emilia.
```

### 3.4 Sezione Servizi - Nuova

```markdown
# I NOSTRI SERVIZI

## CATERING

Organizziamo il catering per matrimoni, eventi aziendali e
feste private. Menu personalizzabili con pasta fresca e
specialità della tradizione.

## STREET FOOD

Portiamo la cucina emiliana ai vostri eventi con il nostro
servizio di street food. Pasta fresca e gnocco fritto
preparati al momento.

## SPEDIZIONI

Riceviamo ordini da tutta Italia. Grazie al confezionamento
sottovuoto e spedizione refrigerata, la freschezza è garantita.

## CONSUMO SUL POSTO

Oltre al servizio da asporto, puoi gustare i nostri piatti
direttamente nel nostro locale. Prenota via WhatsApp!
```

---

## 4. IMPLEMENTAZIONE TECNICA

### 4.1 Controllers da Creare

#### NewsletterController (PRIORITÀ ALTA)

```php
// app/Http/Controllers/NewsletterController.php
- subscribe(): gestisce iscrizione newsletter
- Validazione email + privacy
- Salvataggio in DB
- Messaggio conferma
```

#### ServiceController

```php
// app/Http/Controllers/ServiceController.php
- index(): lista servizi
- show($id): dettaglio servizio
```

#### GalleryController

```php
// app/Http/Controllers/GalleryController.php
- index(): galleria completa
- category($cat): filtro per categoria
```

### 4.2 Views da Creare

```
resources/views/
├── products/
│   ├── index.blade.php (lista prodotti per categoria)
│   └── show.blade.php (dettaglio prodotto)
├── services/
│   ├── index.blade.php (lista servizi)
│   └── show.blade.php (dettaglio servizio)
└── gallery/
    └── index.blade.php (fotogallery)
```

### 4.3 Routes da Aggiungere

```php
// Servizi
Route::get('/servizi', [ServiceController::class, 'index'])->name('services.index');
Route::get('/servizi/{id}', [ServiceController::class, 'show'])->name('services.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/{category}', [GalleryController::class, 'category'])->name('gallery.category');

// Newsletter (già presente ma controller mancante)
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
```

---

## 5. ASSET E IMMAGINI

### 5.1 Immagini Prioritarie

```
URGENTE:
□ images/logo/logo_tortelliamo.png (già referenziato)
□ images/logo/vegan_friendly_icon.png (già referenziato)
□ images/logo/gluten-free-logo.png (già referenziato)

ALTA PRIORITÀ:
□ images/products/ (21 prodotti da seeder)
□ images/laboratorio/ (foto produzione)
□ images/staff/ (foto team)
□ images/services/ (catering, street food, etc.)

MEDIA PRIORITÀ:
□ images/gallery/ (fotogallery eventi)
□ images/mezzi/ (Novellara Porka)
```

### 5.2 Badge da Creare/Aggiungere

```
□ Badge "Km 0"
□ Badge "Prodotti Locali"
□ Badge "Produzione Giornaliera"
□ Badge "Uova Pastorizzate"
```

---

## 6. COMUNICAZIONE CLIENTE

### 6.1 Tone of Voice

**Caratteristiche:**

-   Caldo e accogliente
-   Professionale ma familiare
-   Orgoglioso della tradizione
-   Aperto all'innovazione
-   Territoriale (Emilia, Novellara)

**Esempi:**

-   ✅ "La nostra pasta fresca, fatta come una volta"
-   ✅ "Tradizione che guarda all'innovazione"
-   ✅ "Dal nostro laboratorio alla tua tavola"
-   ❌ "Prodotti gourmet di alta gamma" (troppo formale)
-   ❌ "Fast food emiliano" (troppo casual)

### 6.2 Call to Action Principali

```
1. "Ordina via WhatsApp" (prioritario)
2. "Prenota il tuo tavolo"
3. "Scopri il menu del giorno"
4. "Richiedi preventivo catering"
5. "Ordina online" (Stripe)
```

### 6.3 Informazioni da Evidenziare

**In ogni pagina:**

-   Telefono/WhatsApp: 320 862 6210
-   Orari: Lun-Sab 9-14, 16-20 | Dom 9-14
-   Indirizzo: Piazza Cesare Battisti 3, Novellara

**Homepage:**

-   Produzione giornaliera 5:00-12:00
-   Ingredienti locali e km 0
-   Uova fresche pastorizzate
-   Opzioni vegan e gluten-free

---

## 7. ROADMAP IMPLEMENTAZIONE

### Fase 1: Blockers (1-2 settimane)

```
□ Creare NewsletterController
□ Migration estensione products
□ Migration nuove tabelle (services, gallery, newsletter)
□ Caricare immagini prodotti base
□ Aggiornare ProductSeeder con nuovi prodotti
□ Creare ServiceSeeder
```

### Fase 2: Core Features (2-3 settimane)

```
□ Views products/index e products/show
□ ServiceController + views
□ GalleryController + views
□ Aggiornare testi homepage
□ Aggiungere sezione servizi
□ Implementare filtri prodotti per categoria
```

### Fase 3: Content & Polish (1-2 settimane)

```
□ Caricare tutte le immagini
□ Fotogallery completa
□ Foto staff e laboratorio
□ Badge e certificazioni
□ Ottimizzazione SEO
□ Test completi
```

### Fase 4: Advanced Features (2-3 settimane)

```
□ Admin panel (Filament/Nova)
□ Sistema prenotazioni WhatsApp
□ Integrazione calendario eventi
□ Sistema recensioni
□ Email transazionali
```

---

## 8. CHECKLIST COMUNICAZIONE CLIENTE

### Prima del Meeting

```
□ Preparare mockup nuove sezioni
□ Esempi testi aggiornati
□ Lista immagini necessarie
□ Preventivo ore sviluppo
□ Timeline implementazione
```

### Durante il Meeting

```
□ Mostrare analisi appunti
□ Presentare piano implementazione
□ Discutere priorità
□ Concordare timeline
□ Definire budget
□ Raccogliere feedback
```

### Dopo il Meeting

```
□ Inviare riepilogo decisioni
□ Condividere questo documento
□ Richiedere materiali (foto, loghi)
□ Pianificare milestone
□ Stabilire canale comunicazione
```

---

## 9. NOTE TECNICHE IMPORTANTI

### 9.1 Compatibilità

-   Mantenere compatibilità con codice esistente
-   Non modificare struttura DB esistente (solo estensioni)
-   Preservare design attuale
-   Aggiungere, non sostituire

### 9.2 Performance

-   Ottimizzare query con eager loading
-   Implementare caching per prodotti
-   Lazy loading immagini
-   CDN per asset statici

### 9.3 SEO

-   Meta tags per ogni categoria
-   Structured data prodotti
-   Sitemap dinamica
-   Alt text immagini

---

## 10. CONCLUSIONI

### Obiettivi Principali

1. ✅ Allineare sito con visione cliente
2. ✅ Implementare 3 categorie prodotti
3. ✅ Aggiungere sezione servizi
4. ✅ Migliorare comunicazione brand
5. ✅ Facilitare ordini e prenotazioni

### Tempo Stimato Totale

-   **MVP**: 4-6 settimane
-   **Completo**: 8-10 settimane

### Prossimi Step

1. Review documento con cliente
2. Approvazione piano
3. Raccolta materiali (foto, testi)
4. Inizio Fase 1

---

**Fine Documento**  
_Versione 1.0 - 2025-11-18_
