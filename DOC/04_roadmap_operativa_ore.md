# Roadmap Operativa - Tortelliamo

## Piano Step-by-Step con Tempi in Ore

**Data Inizio:** 2025-11-18  
**Approccio:** Implementazione progressiva e testata

---

## FASE 1: BLOCKERS CRITICI (6-8 ore)

### Step 1.1: Estensione Database Products (3 ore)

**Priorità:** 🔴 ALTA - Necessario per nuove categorie

**Attività:**

-   [ ] Creare migration estensione `products` table
-   [ ] Aggiornare Model `Product.php` con nuovi campi
-   [ ] Aggiungere scopes (byCategory, vegan, glutenFree, kmZero)
-   [ ] Aggiungere costanti categorie
-   [ ] Eseguire migration
-   [ ] Testare model

**Campi da aggiungere:**

```sql
category, subcategory, is_vegan, is_gluten_free,
is_km_zero, ingredients, weight, preparation_time,
available_for_shipping
```

**Tempo stimato:** 3 ore

---

### Step 1.2: ProductSeeder Completo (2 ore)

**Priorità:** 🟡 MEDIA - Necessario per contenuti

**Attività:**

-   [ ] Aggiornare `ProductSeeder.php` con 21 prodotti
-   [ ] Categorizzare prodotti (pasta_fresca, gastronomia, artigianali)
-   [ ] Aggiungere sottocategorie
-   [ ] Popolare campi vegan/gluten-free/km0
-   [ ] Eseguire seeder
-   [ ] Verificare dati in database

**Tempo stimato:** 2 ore

---

### Step 1.3: Views Prodotti Base (3 ore)

**Priorità:** 🟡 MEDIA - Completare funzionalità esistenti

**Attività:**

-   [ ] Creare `resources/views/products/index.blade.php`
-   [ ] Creare `resources/views/products/show.blade.php`
-   [ ] Implementare filtri per categoria
-   [ ] Aggiungere badge (vegan, gluten-free, km0)
-   [ ] Testare routing

**Tempo stimato:** 3 ore

---

## FASE 2: CONTENUTI E COMUNICAZIONE (6-8 ore)

### Step 2.1: Aggiornamento Testi Homepage (2 ore)

**Priorità:** 🟢 IMPORTANTE - Allineamento con visione cliente

**Attività:**

-   [ ] Aggiornare hero section (3 slide)
-   [ ] Modificare section welcome
-   [ ] Aggiornare testi "La Nostra Offerta"
-   [ ] Aggiornare "Perché Sceglierci"
-   [ ] Review generale copy

**File da modificare:**

```
resources/views/home.blade.php
```

**Tempo stimato:** 2 ore

---

### Step 2.2: Sezione Categorie Prodotti (2 ore)

**Priorità:** 🟢 IMPORTANTE - Comunicare 3 anime

**Attività:**

-   [ ] Aggiungere sezione "Tre Anime, Un'Unica Passione"
-   [ ] Card Pasta Fresca
-   [ ] Card Gastronomia
-   [ ] Card Prodotti Artigianali
-   [ ] Link a pagine categoria

**Tempo stimato:** 2 ore

---

### Step 2.3: Tabella Services + Seeder (2 ore)

**Priorità:** 🟢 IMPORTANTE - Nuova funzionalità

**Attività:**

-   [ ] Creare migration `services` table
-   [ ] Creare Model `Service.php`
-   [ ] Creare `ServiceSeeder.php` (5 servizi)
-   [ ] Eseguire migration e seeder
-   [ ] Testare model

**Tempo stimato:** 2 ore

---

### Step 2.4: Sezione Servizi Homepage (2 ore)

**Priorità:** 🟢 IMPORTANTE - Comunicare servizi

**Attività:**

-   [ ] Aggiungere sezione servizi in homepage
-   [ ] Card per ogni servizio (Catering, Street Food, etc.)
-   [ ] Link WhatsApp per prenotazioni
-   [ ] Icone e immagini placeholder

**Tempo stimato:** 2 ore

---

## FASE 3: FUNZIONALITÀ AVANZATE (8-10 ore)

### Step 3.1: ProductController Migliorato (2 ore)

**Priorità:** 🟢 MEDIA

**Attività:**

-   [ ] Aggiornare `index()` con filtri categoria
-   [ ] Aggiornare `show()` con dettagli completi
-   [ ] Implementare filtri vegan/gluten-free
-   [ ] Paginazione prodotti
-   [ ] Breadcrumb

**Tempo stimato:** 2 ore

---

### Step 3.2: ServiceController + Views (3 ore)

**Priorità:** 🟢 MEDIA

**Attività:**

-   [ ] Creare `ServiceController.php`
-   [ ] Creare `resources/views/services/index.blade.php`
-   [ ] Creare `resources/views/services/show.blade.php`
-   [ ] Aggiungere routes
-   [ ] Testare navigazione

**Tempo stimato:** 3 ore

---

### Step 3.3: Gallery System (3 ore)

**Priorità:** 🟢 BASSA

**Attività:**

-   [ ] Creare migration `gallery` table
-   [ ] Creare Model `Gallery.php`
-   [ ] Creare `GalleryController.php`
-   [ ] Creare `resources/views/gallery/index.blade.php`
-   [ ] Filtri per categoria (laboratorio, staff, eventi)
-   [ ] Aggiungere routes

**Tempo stimato:** 3 ore

---

## FASE 4: ASSET E IMMAGINI (4-6 ore)

### Step 4.1: Immagini Prodotti (2 ore)

**Priorità:** 🟡 ALTA

**Attività:**

-   [ ] Preparare/ottimizzare 21 immagini prodotti
-   [ ] Caricare in `public/images/products/`
-   [ ] Aggiornare path in seeder
-   [ ] Verificare visualizzazione

**Tempo stimato:** 2 ore

---

### Step 4.2: Badge e Loghi (1 ora)

**Priorità:** 🟡 MEDIA

**Attività:**

-   [ ] Badge Km 0
-   [ ] Badge Produzione Giornaliera
-   [ ] Badge Uova Pastorizzate
-   [ ] Verificare badge esistenti (Vegan, Gluten-Free)
-   [ ] Posizionare in header

**Tempo stimato:** 1 ora

---

### Step 4.3: Immagini Sezioni (2 ore)

**Priorità:** 🟢 MEDIA

**Attività:**

-   [ ] Foto laboratorio
-   [ ] Foto staff (se disponibili)
-   [ ] Foto servizi (catering, street food)
-   [ ] Ottimizzazione immagini (WebP)
-   [ ] Lazy loading

**Tempo stimato:** 2 ore

---

### Step 4.4: Fotogallery (1 ora)

**Priorità:** 🟢 BASSA

**Attività:**

-   [ ] Raccogliere foto eventi
-   [ ] Foto mezzi (Novellara Porka)
-   [ ] Caricare in gallery
-   [ ] Categorizzare

**Tempo stimato:** 1 ora

---

## FASE 5: OTTIMIZZAZIONI E TEST (4-6 ore)

### Step 5.1: SEO Base (2 ore)

**Priorità:** 🟢 IMPORTANTE

**Attività:**

-   [ ] Meta tags per ogni pagina
-   [ ] Open Graph tags
-   [ ] Structured data prodotti
-   [ ] Alt text immagini
-   [ ] Sitemap.xml

**Tempo stimato:** 2 ore

---

### Step 5.2: Performance (2 ore)

**Priorità:** 🟢 MEDIA

**Attività:**

-   [ ] Ottimizzare query (eager loading)
-   [ ] Cache prodotti
-   [ ] Minify CSS/JS
-   [ ] Lazy loading immagini
-   [ ] Test PageSpeed

**Tempo stimato:** 2 ore

---

### Step 5.3: Testing Completo (2 ore)

**Priorità:** 🔴 CRITICA

**Attività:**

-   [ ] Test tutti i form
-   [ ] Test navigazione
-   [ ] Test responsive mobile
-   [ ] Test browser compatibility
-   [ ] Fix bug trovati

**Tempo stimato:** 2 ore

---

## RIEPILOGO TEMPI

| Fase                   | Ore Min | Ore Max | Priorità   |
| ---------------------- | ------- | ------- | ---------- |
| Fase 1: Blockers       | 6       | 8       | 🔴 Critica |
| Fase 2: Contenuti      | 6       | 8       | 🟢 Alta    |
| Fase 3: Funzionalità   | 8       | 10      | 🟢 Media   |
| Fase 4: Asset          | 4       | 6       | 🟡 Media   |
| Fase 5: Ottimizzazioni | 4       | 6       | 🟢 Alta    |
| **TOTALE**             | **28**  | **38**  | -          |

---

## PIANO SETTIMANALE SUGGERITO

### Settimana 1 (20 ore)

```
Lunedì (4h):    Step 1.1 + 1.2
Martedì (4h):   Step 1.2 (completamento) + 1.3
Mercoledì (4h): Step 2.1 + 2.2
Giovedì (4h):   Step 2.2 + 2.3
Venerdì (4h):   Step 2.4 + 3.1
```

### Settimana 2 (20 ore)

```
Lunedì (4h):    Step 3.2 + 3.3
Martedì (4h):   Step 3.3 (completamento) + 4.1
Mercoledì (4h): Step 4.2 + 4.3
Giovedì (4h):   Step 4.4 + 5.1
Venerdì (4h):   Step 5.2 + 5.3
```

---

## CHECKLIST GIORNALIERA

### Prima di iniziare

-   [ ] Git pull (aggiornare repository)
-   [ ] Verificare ambiente di sviluppo
-   [ ] Backup database

### Durante lo sviluppo

-   [ ] Commit frequenti con messaggi chiari
-   [ ] Test dopo ogni modifica
-   [ ] Documentare modifiche importanti

### Fine giornata

-   [ ] Git push
-   [ ] Aggiornare questo documento (✅ completati)
-   [ ] Annotare eventuali blocchi

---

## PROSSIMO STEP IMMEDIATO

### 🚀 INIZIAMO CON STEP 1.1: Estensione Database Products

**Cosa faremo:**

1. Creare migration per estendere tabella `products`
2. Aggiungere campi: category, subcategory, is_vegan, is_gluten_free, is_km_zero, etc.
3. Aggiornare Model `Product.php` con nuovi campi e scopes
4. Aggiungere costanti per categorie
5. Eseguire migration e testare

**Tempo:** 3 ore  
**Difficoltà:** ⭐⭐⭐ (Media)

**Sei pronto per iniziare?**
Dimmi quando vuoi partire e procediamo step-by-step! 🎯

---

**Fine Roadmap Operativa**  
_Versione 1.1 - 2025-11-18_  
_Tempo totale stimato: 28-38 ore_  
_✅ Newsletter rimossa come da richiesta cliente_
