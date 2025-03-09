const Listing = ({ array }) => {
    return (

        array.map(item => {
            return (
                <div key={item.id}>
                    <div>{item.name}</div>
                    <div>{item.price}</div>
                </div>
            );
        })

    )
};
export default Listing;



pasar nota de elena