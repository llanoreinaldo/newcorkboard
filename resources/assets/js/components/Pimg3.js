import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Pimg3 extends Component {
    render() {
        return (
            <div className="pimg3" >
                <div className="ptext">
                    <span class="border trans">
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
