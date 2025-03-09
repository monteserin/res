import ItemList from '../components/ItemList';

const ItemListContainer = ({ greeting }) => <div>
    <h1>{greeting}</h1>
    <ItemList />
</div>

export default ItemListContainer;