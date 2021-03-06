@extends('base')

@section('content')
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
<div id="table">
</div>

<div id="menu" style="
  padding-top: 64px;
  text-align: center;
">
  <a href="{{url('/')}}">
    <h1 style="color: black;">
      <i class="fa fa-home"></i>
      Playing Card
    </h1>
  </a>
  <h1 onclick="location.reload();" style="cursor: pointer;">
    <i class="fa fa-repeat"></i>
    Restart
  </h1>
</div>

<div style="display: none;">
  <div id="template" class="card">
    <table>
      <tr>
        <td class="number">
          A
        </td>
        <td class="symbol">
          &spades;
        </td>
      </tr>
      <tr class="bottom">
        <td class="number">
          A
        </td>
        <td class="symbol">
          &spades;
        </td>
      </tr>
    </table>
  </div>
</div>
<script>
(function(){
  var game = new function() {
  var cards = [];

  function reset() {
    for (var i = 0;i < cards.length;i++) {
      cards[i].reset();
    }
    cards = [];
  }

  function remove() {
    for (var i = 0;i < cards.length;i++) {
      cards[i].remove();
    }
    cards = [];
  }

  function process() {
    var number = 0;
    for (var i = 0;i < cards.length;i++) {
      if (!number) {
        number = cards[i].get();
      }
      if (cards[i].get() !== number) {
        reset();
        break;
      }
    }
    if (cards.length === 4) {
      remove();
    }
  }

  this.add = function(card) {
    cards.push(card);
    console.log(cards);
    process();
  };

  return this;
};
  var Card = function(game, id, type) {
  var el = template.cloneNode(true);
  el.id = '';

  var numbers = el.getElementsByClassName('number');
  for (var i = 0;i < numbers.length;i++) {
    var number = id + 1;
    if (!id) {
      number = 'A';
    } else if (number === 11) {
      number = 'J';
    } else if (number === 12) {
      number = 'Q';
    } else if (number === 13) {
      number = 'K';
    }
    el.number = numbers[i].innerText = number;
  }

  el.reset = function() {
    el.style.borderColor = 'Black';
    this.added = false;
    console.log('reset #'+this.number+' '+this.type, this.added);
  }

  el.get = function() {
    return this.number;
  };

  var symbols = el.getElementsByClassName('symbol');
  for (var i = 0;i < symbols.length;i++) {
    if (type === 'hearts' || type === 'diams') {
      el.className = 'card red';
    }
    el.type = type;
    symbols[i].innerHTML = '&'+type+';';
  }

  el.onclick = function() {
    console.log(this.added);
    if (!this.added) {
      this.added = true;
      this.style.borderColor = 'DodgerBlue';
      game.add(this);
    }
  };

  return el;
};
  var pack = new function() {
  var types = ['spades', 'clubs', 'hearts', 'diams'];
  var typesCount = 13;
  var cards = [];

  this.add = function(card) {
    cards.push(card)
  };

  this.shuffle = function() {
    var currentIndex = cards.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = cards[currentIndex];
      cards[currentIndex] = cards[randomIndex];
      cards[randomIndex] = temporaryValue;
    }
  }

  this.show = function() {
    for (var i = 0;i < cards.length;i++) {
      table.appendChild(cards[i]);
    }
  }

  for (var i = 0;i < types.length;i++) {
    for (var _i = 0;_i < typesCount;_i++) {
      this.add(new Card(game, _i, types[i]));
    }
  }

  return this;
};

  pack.shuffle();
  pack.show();
})();
</script>
@endsection
