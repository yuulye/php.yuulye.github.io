@extends('post')

@section('head')
@parent
<style>
  #table {
    text-align: center;
  }

  .card {
    cursor: pointer;
    margin: 2px;
    display: inline-block;
    border: 2px solid black;
    border-radius: 4px;
    width: 44px;
    height: 52px;
  }
  .card table {
    width: 100%;
    height: 100%;
  }
  .card td {
    display: inline-block;
    text-align: center;
  }
  .card .symbol, .card .number {
    font-size: 12px;
  }
  .card .bottom {
    transform: rotate(180deg);
  }
  .card.red {
    color: red;
  }
</style>
@endsection

@section('_content')
<div style="text-align: center;padding: 16px;">
  <a href="{{url('/game/playing-card')}}">
    <h1>
    Play Game
    </h1>
  </a>
</div>

<div class="quote">
  A <b>playing card</b> is a piece of specially prepared heavy paper, thin
  cardboard, plastic-coated paper, cotton-paper blend, or thin plastic, marked
  with distinguishing motifs and used as one of a set for playing card games.
  Playing cards are typically palm-sized for convenient handling, and were
  first invented in China during the Tang dynasty.
  <sup>
    <a href="#footer-1">1</a>
  </sup>
</div>

<p>
  This game is made based on <b>playing card</b>. I actually haven't thought
  about what the game would be before I started generating cards using
  JavaScript. While coding, I decided to create a simple puzzle game to match
  the <em>numbers</em> between cards.
</p>

<div id="table">
<div id="" class="card" style="border-color: DodgerBlue;">
    <table>
      <tbody><tr>
        <td class="number">8</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">8</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">9</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">9</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">5</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">5</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">10</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">10</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">4</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">4</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">K</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">K</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">10</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">10</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">K</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">K</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red" style="border-color: DodgerBlue;">
    <table>
      <tbody><tr>
        <td class="number">8</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">8</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">6</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">6</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">J</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">J</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">Q</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">Q</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">3</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">3</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">A</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">A</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">3</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">3</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">7</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">7</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">5</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">5</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red" style="border-color: DodgerBlue;">
    <table>
      <tbody><tr>
        <td class="number">8</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">8</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">6</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">6</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">6</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">6</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card" style="border-color: DodgerBlue;">
    <table>
      <tbody><tr>
        <td class="number">8</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">8</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">J</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">J</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">7</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">7</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">10</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">10</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">J</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">J</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">4</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">4</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">A</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">A</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">2</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">2</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">5</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">5</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">2</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">2</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">2</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">2</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">J</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">J</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">6</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">6</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">3</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">3</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">5</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">5</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">7</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">7</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">9</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">9</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">3</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">3</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">2</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">2</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">9</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">9</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">Q</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">Q</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">7</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">7</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">Q</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">Q</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">Q</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">Q</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">9</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">9</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">10</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">10</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">4</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">4</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">K</td>
        <td class="symbol">♦</td>
      </tr>
      <tr class="bottom">
        <td class="number">K</td>
        <td class="symbol">♦</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">4</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">4</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">A</td>
        <td class="symbol">♣</td>
      </tr>
      <tr class="bottom">
        <td class="number">A</td>
        <td class="symbol">♣</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card">
    <table>
      <tbody><tr>
        <td class="number">K</td>
        <td class="symbol">♠</td>
      </tr>
      <tr class="bottom">
        <td class="number">K</td>
        <td class="symbol">♠</td>
      </tr>
    </tbody></table>
  </div><div id="" class="card red">
    <table>
      <tbody><tr>
        <td class="number">A</td>
        <td class="symbol">♥</td>
      </tr>
      <tr class="bottom">
        <td class="number">A</td>
        <td class="symbol">♥</td>
      </tr>
    </tbody></table>
  </div>
</div>

<p>
  Select the same number those should be 4 cards. After the 4th card selected
  it will be automatically removed and the number of the cards available will
  be less. Can you clear all the cards?
</p>

<div class="footer">
  <div id="footer-1">
    <sup>1</sup>
    https://en.wikipedia.org/wiki/Playing_card
    &middot;
    2017 Dec 7
    &middot;
    1:42 PM
  </div>
</div>
@endsection
