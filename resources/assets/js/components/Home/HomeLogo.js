import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class HomeLogo extends Component {
    render() {
        return (
        <div className="home-logo-img" >
            <div><img src="assets/images/cork.png" alt="" className="box-img"></img></div>
                </div>
            );
        }
    }
    
if (document.getElementById('homeLogoImg')) {
                    ReactDOM.render(<HomeLogo />, document.getElementById('homeLogoImg'));
                }