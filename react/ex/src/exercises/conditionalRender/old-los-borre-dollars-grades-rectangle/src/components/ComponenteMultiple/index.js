function ComponenteMultiple({ opcion, dato1, dato2 }) {
  const calculaDolares = () => (
    <p>
      Dolares:
      {dato1 * 2}
    </p>
  );
  const calculaFahrenheit = () => (
    <p>
      Grados Fahrenheit:
      {9 / 5 * dato1 + 32}
    </p>
  );
  const calculaSuperficie = () => (
    <p>
      Superficie:
      {dato1 * dato2}
    </p>
  );

  return (
    <div>
      {opcion === 1 ? calculaDolares()
        : opcion === 2 ? calculaFahrenheit()
          : opcion === 3 ? calculaSuperficie() : ''}
    </div>
  );
}

export default ComponenteMultiple;
