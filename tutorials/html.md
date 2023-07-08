# Przyśpieszony kurs HTML

HTML (HyperText Markup Language) jest językiem znacznikowym, za jego
pomocą definiujemy strukturę oraz semantykę stron
internetowych. Mówiąc inaczej pozwala nam nadać treściom dodatkowy
kontekst, metadane pomocne przy ich przetwarzaniu. Prosty przykład
będzie pomocny. Spróbuj scharakteryzować poniższy tekst:

```
Trzcina cukrowa, produkcja i jej odkrycie.

Trzcina cukrowa (Saccharum officinarum), z którego wytwarzana jest
obecnie większość cukru (ok. 65% światowej produkcji). Najwięksi
producenci trzciny cukrowej to m.in. Brazylia, Indie, Chiny, Tajlandia
i Pakistan.

W 2013 r. Instytut Ekonomiki Rolnictwa i Gospodarki Żywnościowej wydał
pracę pt. "Sytuacja na światowym rynku cukru i jej wpływ na możliwości
uprawy buraków cukrowych w Polsce". Na wstępie rozdziału drugiego
znajduje się następująca informacja:

Początki uprawy trzciny cukrowej z przeznaczeniem do otrzymywania
cukru datowane są na okres ok. 8 tys. lat p.n.e., kiedy to mieszkańcy
Nowej Gwinei, prawdopodobnie jako pierwsi odkryli właściwości tej
rośliny.
```

![Pole trzciny cukrowej w Wietnamie](sugar-cane.jpg)

_Zdjęcie wykonane przez <a
href="https://unsplash.com/fr/@hongochai10?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Velik
Ho</a>, dostępne na <a
href="https://unsplash.com/photos/UgUeJnWlV_w?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>_

Możemy się domyśleć, że powyższy tekst jest pewnego rodzaju artykułem
(stworzonym na potrzeby tego kursu). Gdybyśmy chcieli podzielić to
opracowanie na nagłówek, streszczenie, cytat z innej publikacji, to
prawdopodobnie musielibyśmy zrobić to ręcznie, tzn. napisanie skryptu,
który robił by to automatycznie byłoby trudne bez żadnej ustalonej
struktury. Zobaczmy jak wygląda dokument o tej samej treści wraz ze
znacznikami języka HTML:

```html
<article lang="pl">
  <h2>Trzcina cukrowa, produkcja i jej odkrycie.</h2>

  <p>
    Trzcina cukrowa <i lang="la">(Saccharum officinarum)</i>, z
    którego wytwarzana jest obecnie większość cukru (ok. 65% światowej
    produkcji). Najwięksi producenci trzciny cukrowej to
    m.in. Brazylia, Indie, Chiny, Tajlandia i Pakistan.
  </p>
  
  <p>
    W 2013 r. <a href="https://pl.wikipedia.org/wiki/Instytut_Ekonomiki_Rolnictwa_i_Gospodarki_%C5%BBywno%C5%9Bciowej">
    Instytut Ekonomiki Rolnictwa i Gospodarki Żywnościowej</a> wydał
    pracę pt. "Sytuacja na światowym rynku cukru i jej wpływ na
    możliwości uprawy buraków cukrowych w Polsce". Na wstępie
    rozdziału drugiego znajduje się następująca informacja:
  </p>
  
  <blockquote cite="https://depot.ceon.pl/bitstream/handle/123456789/3783/71.pdf?sequence=1">
    Początki uprawy trzciny cukrowej z przeznaczeniem do otrzymywania
    cukru datowane są na okres ok. 8 tys. lat p.n.e., kiedy to
    mieszkańcy Nowej Gwinei, prawdopodobnie jako pierwsi odkryli
    właściwości tej rośliny.
  </blockquote>
  
  <img src="./sugar-cane.jpg" alt="Pole trzciny cukrowej w Wietnamie">
</article>
```

Znaczniki HTML w powyższym tekście dostarczają nam (lub np. silnikom
wyszukiwania) dodatkowe informacje o tekście. W tym wypadku możemy się
dowiedzieć, że dokument jest artykułem w języku polskim, który składa się
z nagłówka, dwóch paragrafów, cytatu oraz zdjęcia. Dodatkowo wiemy, że
w tekście znajduje się termin z języka łacińskiego, mamy dostęp do
strony Wikipedii o instytucie oraz możemy bezpośrednio odnieść się do
całości cytowanej pracy (atrybut `cite`). HTML opisuje także
strukturę, fachowa nazwa rośliny znajduje się w pierwszym paragrafie,
również sam on (znacznik `p`) jest częścią całego artykułu.

## Elementy strony internetowej HTML

Podstawowa struktura dokumenta wygląda następująco:

```html
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Trzcina cukrowa</title>
    <!-- Pozostałe metadane, skrypty, style -->
  </head>
  <body>
    <h1>Trzcina cukrowa</h1>
    <!-- Pozostała treść strony -->
  </body>
</html>
```

Preambuła `<!DOCTYPE html>` jest potrzebna, aby przeglądarka
internetowa pracowała w trybie zgodnym ze specyfikacją, znacznik
`html` jest znacznikiem, który "definiuje" stronę, jej rozpoczęcie. W
zagnieżdżonym znaczniku `head` znajdują się skrypty, zewnętrzne style,
a w `body` cała treść, która zostanie wyświetlona użytwkonikowi.

Na tym etapie warto zdefiniować, co w praktyce oznacza, że w `head`
znajdują się skrypty lub `body` stanowi treść strony. HTML jest
językiem, formą zapisu opartą na specyfikacji, to **przeglądarka**
internetowa (Firefox, Safari, Chrome) jest napisana w taki sposób, aby
z tego dokumentu wygenerować nam stronę. Gdy dodajemy style CSS za
pomocą znacznika `link`, **przeglądarka** po pobraniu tego dokumentu wyśle
żądanie na określony adres URL, pobierze, przetworzy i wczyta
zdefiniowane style.

Przeglądarka, to potężne narzędzie, ma domyślne style dla wielu
znaczników, np. `input` wyświetli pole tekstowe, element listy jest
domyślnie wcięty i jest poprzedzony kropką. Te style często różnią się
pomiędzy przeglądarkami, dlatego stosowane są takie praktyki jak
napisywanie stylów domyślnych.

> Dlaczego przeglądarka wyświetla źle sformatowane strony?  >
Przeglądarka jest stworzona z myślą o użytkownikach, dlatego nie jest
wymagana pełna poprawność. Jest to na wzór filozofii: lepiej zobaczyć
lekko uszkodzoną strukturę strony niż komunikat błędu, że jakiś
znacznik nie został zamknięty.
