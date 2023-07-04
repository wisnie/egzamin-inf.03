# Przyśpieszony kurs HTML

HTML (HyperText Markup Language) jest językiem znacznikowym, za jego
pomocą definiujemy strukturę oraz semantykę stron
internetowych. Mówiąc inaczej pozwala nam nadać treściom dodatkowy
kontekst, metadane pomocne przy ich przetwarzaniu. Prosty przykład
będzie pomocny. Oceń, bądź scharakteryzuj poniższy tekst:

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
wyszukiwania) dodatkowych informacji o tekście. W tym wypadku możemy
się dowiedzieć, że praca jest artykułem w języku polskim, który składa
się z nagłówka, dwóch paragrafów, cytatu oraz zdjęcia. Dodatkowo
wiemy, że w tekście znajduje się termin z języka łacińskiego, mamy
dostęp do strony Wikipedii o instytucie oraz możemy bezpośrednio
odnieść się do całości cytowanej pracy (atrybut `cite`). HTML opisuje
także strukturę, fachowa nazwa rośliny znajduje się w pierwszym
paragrafie, również sam on (znacznik `p`) jest częścią całego artykułu.

## Elementy strony internetowej HTML

//TO-DO Doctype, html, head, body, atrybuty.
