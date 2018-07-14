import React, {
    Component
} from 'react';
import ReactDOM from 'react-dom';

export default class Pimg1 extends Component {
    render() {
        return (
        <div className="pimg1" >
            <div><img src="assets/images/cork.png" alt="" className="box-img"></img></div>
                </div>
            );
        }
    }
    
if (document.getElementById('pimg1')) {
                    ReactDOM.render(<Pimg1 />, document.getElementById('pimg1'));
                }