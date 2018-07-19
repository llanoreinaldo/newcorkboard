import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class GetOrganizedImg extends Component {
    render() {
        return (
            <div className="get-organized-img">
                <div className="ptext">
                    <span className="border trans">
                        Get Organized
                    </span>
                </div>
            </div>
        );
    }
}

if (document.getElementById('getOrganizedImg')) {
    ReactDOM.render(<GetOrganizedImg />, document.getElementById('getOrganizedImg'));
}
