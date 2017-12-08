<!-- Toto vypisuje hlasku, ked je zablokovaný prístup k zamestancovmu kontu -->
@if ($message = Session::get('danger'))
    <div class="alert alert-danger" style="text-align: center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: red; position: relative !important; right: auto !important; top: auto !important">
            <span aria-hidden="true" >&times;</span>
        </button>
        <p class="message">{{ $message }}</p>
    </div>
@endif

<!-- Toto vypisuje hlasku, ked je niečo dobre alebo sa zamestnanec odhlási. -->
@if ($message = Session::get('success'))
    <div class="alert alert-success" style="text-align: center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: red; position: relative !important; right: auto !important; top: auto !important">
            <span aria-hidden="true" >&times;</span>
        </button>
        <p class="message">{{ $message }}</p>
    </div>
@endif