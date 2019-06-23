// SoloLearn.com - JavaScript Challenge
// by Stalevar

function A() {
    this.x = 50;
    this.y = 30;
    this.b = function() {
        this.z = this.x % this.y;
        return this.z;
    };
}
a = new A();
console.log(a.b());
