function ComponenteMultiple({ opcion, dias }) {
  const calculaCosteHotel = () => (
    <p>
      Coste alquiler hotel:
      {dias * 140}
      €
    </p>
  );

  const calculaAlquilerCoche = () => {
    let coste = dias * 40;
    if (dias > 7) coste -= 50;
    else if (dias > 3) coste -= 20;
    return (
      <p>
        Coste alquiler coche:
        {coste}
        €
      </p>
    );
  };

  return (
    <div>
      {opcion === 1 ? calculaCosteHotel()
        : opcion === 2 ? calculaAlquilerCoche() : ''}
    </div>
  );
}

export default ComponenteMultiple;
