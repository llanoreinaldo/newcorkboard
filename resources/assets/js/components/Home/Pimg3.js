import React, { Component } from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class Pimg3 extends Component {
    render() {
        return (
            <div className="pimg3" >
                <div className="ptext">
                    <span className="border trans">
                        Collaborate
                    </span>
                </div>
            </div >
        );
    }
}

if (document.getElementById('pimg3')) {
    ReactDOM.render(<Pimg3 />, document.getElementById('pimg3'));
}
