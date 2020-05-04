const os = require('os');

console.log(os.platform());
console.log(os.release());
console.log(os.totalmem());
console.log(os.freemem());

//Ejemplo de codigo asincrono. Si no existe el archivo texto.txt , no va haber un error y nodejs daria primero la ultima linea y luego la primera
//Esto se debe porque la funcion writefile es una indicacion al sistema operativo, entonces nodejs sigue su curso y despues que el OS
//Termina de guardar el archivo, ya nodejs continua con lo otro. 

const fs = require ('fs');

fs.writeFile('./texto.txt', 'linea uno' , function (err){
    if(err){
        console.log(err);
    }
    console.log('Archivo creado');
});

console.log('ultima linea de codigo')