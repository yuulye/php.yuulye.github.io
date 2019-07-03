window.onload = function() {
function Card(color = 0, value = 0, type = 0) {
    var self = this;
    let classes = ["card"];
    let symbol = "&#x1F0CF";

    this.id = 0;
    this.setId = function(id) {
        self.id = id;
        self.createView();
    };

    this.createView = function() {
        let el = card.cloneNode(true);
        el.id = "card" + self.id;
        let td =
          el.getElementsByTagName("td")[0];
        td.innerHTML = symbol;
        el.className = classes.join(" ");
        content.appendChild(el);
        content.innerHTML += "&nbsp;";
    }

    if(color) {
        classes.push("red");
    }

    let joker = "normal";
    if(!value) {
        joker = "joker";
    } else {
        let ch = value>10
            ?['J','Q','K','A'][value-11]
            :value;
        symbol = "<b>" + ch + "</b>";
        symbol += "<div>";
        if(color) {
            if(!type) {
                symbol += "&diams;";
            } else {
                symbol += "&hearts;";
            }
        } else {
            if(!type) {
                symbol += "&clubs;";
            } else {
                symbol += "&spades;";
            }
        }
        symbol += "</div>";
    }
    classes.push(joker);

    return self;
}

var cards = [];

for(let i = 0;i < 2;i++) {
    let card = new Card(i);
    let id = cards.push(card) - 1;
    card.setId(id);
    for(let k = 0;k < 2;k++) {
        for(let j = 2;j <= 14;j++) {
            let l = k + i;
            let card = new Card(
                l == 2 ? 0 : l
                , j, i
            );
            let id = cards.push(card) - 1;
            card.setId(id);
        }
    }
}

console.log(cards.length);

};

