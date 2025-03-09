import { useEffect, useState } from 'react';
import { getGuests } from '../app/api';

function Read() {
  const [guests, setGuests] = useState([]);

  useEffect(() => {
    getGuests().then((guests) => {
      setGuests(guests);
    });
  }, []);

  return (
    <div>
      <h1>Read</h1>
      <div>
        {
                    guests.map((guest) => <p key={guest.id}>{guest.name}</p>)
                }
      </div>
    </div>
  );
}

export default Read;
