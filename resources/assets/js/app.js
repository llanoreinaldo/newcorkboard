/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import Main from "./components/Main";

//Home Imports
import HomeLogo from './components/Home/HomeLogo';
import GetOrganizedImg from './components/Home/GetOrganizedImg';
import CollaborateImg from './components/Home/CollaborateImg';
import LoginRegister from './components/Home/LoginRegister';
import CreateBoard from './components/Home/CreateBoard';
import StyledApp from './components/Home/CreateBoard.1';
import OurPurpose from './components/Home/OurPurpose';
import ContactUs from './components/Home/ContactUs';
import InviteModal from './components/Home/InviteModal';
import ErrorModal from './components/Home/ErrorModal';

//Auth Imports

import RegisterApp from './components/Auth/RegisterModal';
import LoginApp from './components/Auth/LoginModal'

//Board Imports

import Filters from './components/Board/Filters';
import Navbar from './components/Board/Navbar';
import Cards from './components/Board/Cards';
import Announcements from './components/Board/Announcements'
import BoardModals from './components/Board/BoardModals'

//Modals Imports
import Index from "./components/Modals/Index";
import IndexStyles from "./components/Modals/IndexStyles";

import Modal from './components/Modals/Modal/Modal';
import ModalStyles from './components/Modals/Modal/ModalStyles';
import ModalLauncher from './components/Modals/Modal Launcher/ModalLauncher'
import ModalLauncherStyle from './components/Modals/Modal Launcher/ModalLauncherStyle'