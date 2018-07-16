import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Section3 extends Component {
    render() {
        return (
            <section className="section section-dark">
                <h2>Contact Us</h2>
                <a href="mailto:corkboard062018@gmail.com?subject=Cork%20Board&" target="_top">
                <i className="fa fa-envelope fa-fw" aria-hidden="true" ></i> 
                </a> 
                <a href="tel:+1-407-577-7607">
                <i className="fa fa-phone-square fa-fw" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/company/projectcodex/">
                <i className="fa fa-linkedin-square fa-fw" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/projectcodex2018/">
                <i className="fa fa-facebook-official fa-fw" aria-hidden="true"></i>
                </a>
                <br></br>
                    <p>All Rights Reserved. © Cork Board 2018</p>
            </section>
                );
            }
        }
        
if (document.getElementById('section3')) {
                    ReactDOM.render(<Section3 />, document.getElementById('section3'));
                }
