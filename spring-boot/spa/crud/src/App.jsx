import { useState, useEffect } from 'react';
import { savePersonName, getPersons, deletePerson, updatePerson } from './app/api';

const App = () => {

    const [personName, setPersonName] = useState(null);
    const [personId, setPersonId] = useState(null);
    const [persons, setPersons] = useState([]);

    const savePerson = async () => {
        await savePersonName({ nombre: personName });
        getPersonsData()
    }

    const removePerson = async () => {
        await deletePerson(personId);
        getPersonsData();
    }
    useEffect(() => {
        getPersonsData();
    }, [])

    const getPersonsData = async () => {
        const p = await getPersons();
        setPersons(p.data);
    }

    const updatePersonData = async () => {
        await updatePerson(personId, personName);
        getPersonsData();
    }

    return (
        <div style={{ textAlign: 'left' }}>
            <input type="text" onChange={e => setPersonId(e.target.value)} placeholder="personId" />
            <input type="text" onChange={e => setPersonName(e.target.value)} placeholder="personName" />


            <button onClick={savePerson}>Salvar</button>
            <button onClick={removePerson}>Borrar</button>
            <button onClick={updatePersonData}>Update</button>


            {
                persons.map(p => <p key={p.id}>{p.id} - {p.nombre}</p>)
            }

        </div>
    );
}

export default App;
