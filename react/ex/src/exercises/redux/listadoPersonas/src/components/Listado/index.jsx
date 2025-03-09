import Persona from '../Persona';

const elementos = [
  { id: 1, name: 'elemento1' },
  { id: 2, name: 'elemento2' },
  { id: 3, name: 'elemento3' },
  { id: 4, name: 'elemento4' },
  { id: 5, name: 'elemento5' },
  { id: 6, name: 'elemento6' },
];

function Listado() {
  return (
    <div>
      {elementos.map(({ id, name }) => (
        <Persona
          onClick={() => { }}
          key={id}
          nombre={name}
        />
      ))}
    </div>
  );
}

export default Listado;
