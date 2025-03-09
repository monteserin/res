import { createItem, updateItem } from "../app/api";

const Pruebas = () => {
    return (
        <div>
            <button onClick={() => { createItem({ nombre: 'aaaaaaaaaaaaaaaaaaaa' }) }}>Alta</button>
            <button onClick={() => { }}>Modificar</button>
        </div>
    )
}


export default Pruebas;