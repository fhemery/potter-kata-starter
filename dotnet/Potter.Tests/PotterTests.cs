using System.Collections.Generic;
using Xunit;

namespace Potter.Tests;

public class PotterTests
{
    [Fact]
    public void Should_Work()
    {
        Assert.True(true);
    }

    [Fact]
    public void Should_Not_Work()
    {
        var potter = new Potter();
        Assert.Equal(0, potter.GetPrice(new List<int>()));
    }
}