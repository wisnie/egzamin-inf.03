# Esencja języka HTML

HTML (HyperText Markup Language) jest językiem znaczników. Znaczniki służą do definiowania struktury 
oraz semantyki stron internetowych. Mówiąc inaczej, za pomocą języka HTML możemy nadać przedstawionej treści
dodatkowy kontekst do przetworzenia oraz różne metadane dokumentu. Poniżej przedstawiam przykładową
zawartość strony:

```
Trzcina cukrowa, produkcja i jej odkrycie.

Trzcina cukrowa (Saccharum officinarum), roślina, z której wytwarza się
obecnie większość światowej produkcji cukru (ok. 65%). Najwięksi
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

_Zdjęcie wykonane przez <a href="https://unsplash.com/fr/@hongochai10?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Velik
Ho</a>, dostępne na <a href="https://unsplash.com/photos/UgUeJnWlV_w?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>_

Powyższy tekst jest artykułem, który stworzyłem na potrzeby tego wpisu. Potrafimy (jako ludzie) logicznie
podzielić zawartość tekstu na poszczególne składowe: nagłówek, definicja, cytat z publikacji, zdjęcie.
Zrobienie tego w sposób zautomatyzowany, czy odpowiednie wyświetlenie treści przez przeglądarkę nie jest
już takie trywialne bez uprzedniej struktury. Przy pomocy języka HTML, możemy tę strukturę zdefiniować:

```html
<article lang="pl">
  <h2>Trzcina cukrowa, produkcja i jej odkrycie.</h2>

  <p>
    Trzcina cukrowa <i lang="la">(Saccharum officinarum)</i>, roślina, z której wytwarza się
      obecnie większość światowej produkcji cukru (ok. 65%). Najwięksi
      producenci trzciny cukrowej to m.in. Brazylia, Indie, Chiny, Tajlandia
      i Pakistan.
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

Znaczniki dostarczają dodatkowych informacji:

1. Przedstawiona treść jest artykułem, czyli zagłębiając się w definicję tego znacznika, stanowi odrębną całość.
2. Artykuł jest napisany w języku polskim (atrybut `lang`).
3. Artykuł składa się z nagłówka, dwóch paragrafów, cytatu oraz zdjęcia.
4. W artykule pojawia się termin z języka łacińskiego.
5. Mamy dostęp do odnośnika na Wikipedii do cytowanego podmiotu.
6. Załączone zdjęcie dostępne jest za pomocą adresu dostępu.
7. Zdjęcie zawiera zdefiniowany tekst alternatywny.

Te i inne informacje wykorzystywane są przez przeglądarki podczas przetwarzania treści strony,
a także inne programy operujące na dokumentach HTML. Zastosowanie odpowiedniej do treści struktury
zapewnia lepsze indeksowanie w wynikach wyszukiwania.

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

Preambuła `<!DOCTYPE html>` jest wymagana, aby przeglądarka internetowa pracowała w trybie
zgodnym ze standardem/specyfikacją. Znacznik `<html>` definiuje początek strony. W zagnieżdżonym znaczniku 
`<head>` znajdują się m.in. skrypty, zewnętrzne style, a w `<body>` wcześniej wspomniana treść.

Gdy mówimy, że w `<head>` znajdują się np. zewnętrzne style, to nie oznacza, że są
one magicznie "wstrzyknięte" w dokument. Gdy **przeglądarka** pobrała plik HTML i w momencie
jego przetwarzania natrafia na znacznik `<link href="..." rel="stylesheet">`, wykonuje
kolejne zapytanie do serwera, w celu pobrania tego pliku. Następnie style są przetwarzane oraz
aplikowane do odpowiednich elementów strony.

Przeglądarka ma bardzo wiele domyślnych stylów dla poszczególnych elementów. 
Przykładowo elementy listy są domyślnie wcięte, zazwyczaj będąc poprzedzonym kropką
lub liczbą. Zdarza się, że domyślne style są różne dla poszczególnych przeglądarek,
dlatego częstą praktyką jest ich nadpisywanie/resetowanie.

> **Dlaczego przeglądarka wyświetli także źle sformatowane strony?**
> 
> Podczas tworzenia dokumentów HTML, możemy zauważyć, że przeglądarka
> wygeneruje także strony, których struktura nie jest w pełni zgodna ze specyfikacją — np. zazwyczaj 
> możliwe jest pominięcie znacznika `<html>`, czy `<body>`.
> 
> Przeglądarka jest stworzona przede wszystkim z myślą o użytkownikach. Wyświetlenie
> jakiejś treści (nawet uszkodzonej) jest lepsze niż pokazanie komunikatu o błędzie.
> Kiedyś miało to jeszcze większe znaczenie, ponieważ programy do sprawdzania poprawności
> kodu źródłowego były mniej dostępne, a te przeglądarki, które nie radziły sobie
> z wyświetlaniem niepoprawnie sformatowanego HTML-a były na straconej pozycji względem
> konsumenta.

## Bibliografia

- [Całościowy kurs HTML stworzony przed MDN](https://developer.mozilla.org/en-US/docs/Learn/HTML)
- [Jak działają przeglądarki](https://developer.mozilla.org/en-US/docs/Web/Performance/How_browsers_work)
- [Materiał Computerphile o różnicach pomiędzy HTML, XML, SGML](https://youtu.be/RH0o-QjnwDg?si=4BLCqHecDXVblMdT)
- [Artykuł o silniku CSS](https://hacks.mozilla.org/2017/08/inside-a-super-fast-css-engine-quantum-css-aka-stylo/)
