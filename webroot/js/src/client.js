import React,{Component} from 'react'
import { render } from 'react-dom'
import $ from 'jquery'



class MainPage extends Component {
    constructor(props){
        super(props);
        
    }
    
    addRankBlock(){
         $.ajax({
                url: 'https://bc52595b191447b2b80a76c115359afe.vfs.cloud9.us-east-2.amazonaws.com/qiitaposts/hello',
                type:'POST',
                dataType: 'text',
                data : {'site_id': "", 'role_id': ""},
                timeout:10000,
            }).done(function(data) {
               alert('hellohellohelloooo');
            }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown , textStatus);
            })

    }
    
    popup(){
        alert('押されたよ');
    }
    
    render () {
        return (
            <div>
            <div>Hello ryo!</div>
            <input type="button" value="投稿" onClick={()=>this.addRankBlock()} />
            </div>
        )
    };
}

render(
    <div>
        Hello World!
        < MainPage />
    </div>,
    document.getElementById('root')
);