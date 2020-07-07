@extends('template')

@section('title')
    Lista książek
@endsection

@section('content')
   <div class="container">
       <table class="table">
           @forelse($booksList as $book)
               <tr>
                   <td>{{ $book->name }}</td>
                   <td>{{ $book->year }}</td>
                   <td>{{ $book->publication_place }}</td>
                   <td><a href="{{ url('/books', [$book->id]) }}">Podgląd</a></td>
                   <td><a href="{{ url('/books', [$book->id]) }}">Edycja</td>
                   <td><a href="{{ url('/books', [$book->id, 'delete']) }}">Usuń</a></td>
               </tr>
               @isset($book->authors)
                 <tr>
                     <td>Autorzy</td>
                     <td>
                         <ul>
                             @foreach($book->authors as $author)
                               <li>
                                   {{ $author->lastname }}
                               </li>
                             @endforeach
                         </ul>
                     </td>
                 </tr>
               @endisset
           @empty
                Brak rekordów
           @endforelse
       </table>
   </div>



<div class=”container”>

    @isset ($book)

    <table class=”table”>

      <tr>

        <td>Nazwa Książki</td>

                    <td> {{$book->name}} </td>

      </tr>

        <tr>

          <td>Rok wydania</td>

                    <td> {{$book->year}} </td>

        </tr>

        <tr>

          <td>Miejsce wydania</td>

            <td> {{$book->publication_place}} </td>

        </tr>

        <tr>

          <td>Liczba stron</td>

            <td> {{$book->pages}} </td>

        </tr>

        <tr>

          <td>Cena</td>



          <td> {{$book->price}} </td>

      </tr>

                  @isset($book->isbn)

                        <tr>

                          <td>Numer ISBN</td>

                          <td> {{$book->isbn->number}} </td>

                        </tr>

                        <tr>

                          <td>Numer ISBN wydany przez</td>

                          <td> {{$book->isbn->issued_by}} </td>

                        </tr>

                        <tr>

                          <td>Data wydania numeru ISBN</td>

                          <td> {{$book->isbn->issued_on}} </td>

                        </tr>

                  @endisset

          </tr>

  </table>

  @endisset

</div>



@endsection('content')
