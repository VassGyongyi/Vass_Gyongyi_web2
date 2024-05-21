import Sor from "./Sor";
import Form from 'react-bootstrap/Form';
import Table from 'react-bootstrap/Table';

import useAdatContext from "../context/Adatcontext";

export default function Urlap(){
const {tema}=useAdatContext();
const {szavakList}=useAdatContext();
    

return(
    <>
<h3>Szótár</h3>
<Form className="my-3"
>

<select className="form-select">

<option value="tema">Témák</option>
{tema.map((element, index)=>
    <option key={index} value={element}>
    {element}
    </option>

)}
</select>
<Table stiped bordered hover responsive id="tabla">
<thead>
<tr>
<th data-label="angol">ANGOL</th>
<th data-label="magyar">MAGYAR</th>
<th>Visszajelzés</th>
</tr>
</thead>
<tbody>
{szavakList.map((element, index)=>{
    return(
        <Sor adat={element} key={index}/>
    )
})}
</tbody>
</Table>

</Form>

</>
    )
}