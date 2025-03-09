function Persona({ nombre, onClick }) {
  return <div onClick={onClick}>{nombre}</div>;
}

export default Persona;
