import RegisterRepository from 'Repositories/storefront/account/RegisterRepository';

export default class RegisterAction {

    /**
     *
     * @param email
     * @param password
     * @param firstname
     * @param lastname
     */
    doRegister(email, password, firstname, lastname) {

        cy.visit('/account');

        const repo = new RegisterRepository();

        repo.getAccountType().select('Privatkunde');
        repo.getSalutation().select('Herr');

        repo.getFirstname().clear().type(firstname);
        repo.getLastname().clear().type(lastname);

        repo.getEmail().clear().type(email);
        repo.getPassword().clear().type(password);

        repo.getStreet().clear().type('Mollie');
        repo.getZipcode().clear().type('Mollie');
        repo.getCity().clear().type('Mollie');

        repo.getCountry().select('Deutschland');

        repo.getRegisterButton().click();
    }
}
