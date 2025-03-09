import { useState, useEffect } from 'react';
import { deleteGuest, getGuests } from '../app/api';

function Delete() {
  const [id, setId] = useState('');
  const [guests, setGuests] = useState([]);

  const query = () => getGuests().then((guests) => {
    setGuests(guests);
  });
  useEffect(() => {
    query();
  }, []);

  return (
    <div>
      <h1>Delete</h1>
      <p>
        <input type="text" placeholder="Guest Id" onChange={(e) => setId(e.target.value)} />
        <button onClick={async () => {
          await deleteGuest(id);
          query();
        }}
        >
          Delete
        </button>
      </p>

      <div>
        {
                    guests.map((guest) => (
                      <p key={guest.id}>
                        {guest.id}
                        {' '}
                        -
                        {' '}
                        {guest.name}
                      </p>
                    ))
                }
      </div>
    </div>
  );
}

export default Delete;
