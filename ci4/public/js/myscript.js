alert("Do not expect anything on this page");


function myFunction() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
  }


  let text = "";
  for (let i = 0; i < 10; i++) {
    if (i === 3) { break; }
    text += "The number is " + i + "<br>";
  }
  
  document.getElementById("loop").innerHTML = text;

  document.getElementById("random").innerHTML =
  Math.floor(Math.random() * 10);

  class Car {
    constructor(name, year) {
      this.name = name;
      this.year = year;
    }
  }
  
  const myCar = new Car("Ford", 2014);
  document.getElementById("class").innerHTML =
  myCar.name + " " + myCar.year;

  function myDisplayer(some) {
    document.getElementById("callback").innerHTML = some;
  }
  
  function myFirst() {
    myDisplayer("Hello");
  }
  
  function mySecond() {
    myDisplayer("Goodbye");
  }
  
  myFirst();
  mySecond();

  
  function goBack() {
    window.history.back()
  }
