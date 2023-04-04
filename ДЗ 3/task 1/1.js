const a = Number.parseFloat(prompt("Введите температуру в градусах Цельсия"));
const b = ((9 / 5) * a + 32).toFixed(2);
alert(`Цельсий: ${a}, Фаренгейт: ${b}`);