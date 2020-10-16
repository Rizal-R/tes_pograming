import React from 'react';
import axios from 'axios';

export default class GetList extends React.Component{
constructor(){
    super()
    this.state={
        kurs: []
    }
}
 componentWillMount(){
     axios.get('http://localhost/backend/kurs/data_kurs')
     .then(res=>{
         console.log('data_sudah diambil');
         console.log(res.data);
         this.setState({
             kurs: res.data
            })
     })
    }
  
     render(){
         return( 
         <ul>
             {this.state.kurs.map(raw=>{
                 return(
                     <li key={raw.id_kurs}> {raw.bank}</li>
                     
                            
                
                 )
             })}
         </ul>
         )
     
 }
}
