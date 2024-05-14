<header>
    <div class="logo">
        <a href="">
            <span>ComicsBase</span>
        </a>
    </div>
    <nav>
        <ul>
            <li>Benvenuto admin!</li>
            <a href="/">
                <li>Logout</li>
            </a>
        </ul>
    </nav>
</header>


<style type="text/css">
    header {

        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--bgheader-violet);


        & .logo {

            padding: 0 1rem;

            & span {
                font-size: 40px;
                font-weight: 600;
                color: var(--textheader-yellow);
            }

            & span:hover {
                color: var(--hover-textheader-yellow);
            }
        }

        & nav {

            & ul {
                list-style: none;
                display: flex;


                & a {
                    text-decoration: none;
                    margin: 0 2rem;
                }

                & li {
                    padding: 1rem;
                    font-weight: 500;
                    font-size: 20px;
                    color: var(--textheader-yellow);
                }

                & li:hover {

                    background-color: var(--hover-bgheader-violet);
                    color: var(--hover-textheader-yellow);

                }

            }
        }
    }
</style>