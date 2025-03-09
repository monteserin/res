import { connect } from 'react-redux';

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
    <ul>
      {elementos.map(({ id, name }) => (
        <li
          onClick={() => { }}
          key={id}
        >
          {name}
        </li>
      ))}
    </ul>
  );
}

export default Listado;
